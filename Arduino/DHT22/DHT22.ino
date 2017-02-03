#include <DHT.h>
#include <DHT_U.h>
#include <ESP8266WiFi.h>

#define DHTPIN            10         // Pin which is connected to the DHT sensor.
#define DHTTYPE           DHT22     // DHT 22 (AM2302)

const char* ssid     = "YOUR WIFI ID";
const char* password = "YOUR WIFI PASSWORD";

const char* host = "192.168.43.43";
const char* streamId   = "add.php";

DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(115200);
  delay(10);

  dht.begin();

  // We start by connecting to a WiFi network

  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());

}

int value = 0;

void loop() {
  delay(5000);
  ++value;

  float h = dht.readHumidity();
  // Read temperature as Celsius (the default)
  float t = dht.readTemperature();
  // Read temperature as Fahrenheit (isFahrenheit = true)
  float f = dht.readTemperature(true);

  // comfirm if read h,t,f is not number
  if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }

  Serial.print("connecting to ");
  Serial.println(host);
  
  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }
  
  // We now create a URI for the request
  String url = "/BureauIntelligent/";
  url += streamId;
  url += "?value=";
  url += value;
  url += "&temp1=";
  url += t;
  url += "&hum1=";
  url += h;
  
  Serial.print("Requesting URL: ");
  Serial.println(url);
  
  // This will send the request to the server
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" + 
               "Connection: close\r\n\r\n");
   

  client.stop();
      
/*
client.print( "POST /raspberry/add.php?");
client.print("temp1=");
client.print( t );
client.print("&");
client.print("hum1=");
client.print( h );
client.println( " HTTP/1.1");
client.println( "Host:192.168.43.43" );
client.println( "Content-Type: application/x-www-form-urlencoded" );
client.println( "Connection: close" );
client.println();
client.println();
client.stop();
*/
delay( 5000 );


  
  Serial.println();
  Serial.println("closing connection");
}

