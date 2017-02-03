#define RED 2
#define AirQualityPin A0

//const int airqual=16;
int i=0;
int airread;
int init_voltage;
int temp;
int airaverage;
int looper=0;


void setup()
{
    Serial.begin(9600);
    pinMode(AirQualityPin, INPUT);
    pinMode(RED, OUTPUT);
    digitalWrite(RED, LOW);
    AirQualityInit();
}

void avgVoltage()
{
    if(i==12)//sum 1 minutes
    {
      airaverage=temp/12; 
      temp=0;
      Serial.println(""); 
      Serial.print("air quality average in 1 minutes:");     
      Serial.println(airaverage);
      Serial.println("");    
      i=0;    
    }
      else 
    {
      temp+=airread;
      i++;
    }
}

void AirQualityInit()
{
    delay(3000);
    Serial.println("sys_starting...");
    delay(10000);  // 10s to start 
    init_voltage=analogRead(AirQualityPin);
    Serial.println("The init voltage is ...");
    Serial.println(init_voltage);
    while(init_voltage)
    {
        if(init_voltage<1000 && init_voltage>10)// the init voltage is ok
        {
            airaverage=airread=analogRead(AirQualityPin);//initialize first value
            Serial.println("Sensor ready.");
            Serial.println("");   
            break;
        }
        else if(init_voltage>=1000||init_voltage<=10)
        {  
            i++;
            Serial.println("waitting sensor init..(it takes 60 seconds to init)");
            delay(60000);// wait for 60s
            init_voltage=analogRead(AirQualityPin);
            if(i==5)
            {
                i=0;
                Serial.println("Sensor Error!");
            }
          }
        else 
        break;
    }
}

void AirQuality()
{
    airread=analogRead (AirQualityPin);
    avgVoltage();
    Serial.print("sensor_value:");
    Serial.println(airread);
    
    if (airread<=50)
    {    
      Serial.println("Air fresh");   
    }
  
    else if(airread<200 && airread>=46)
    {
      Serial.println("Impurity");
    }
  
    else if (airread>200 && airread<=400)
    {
      Serial.println("Low pollution!");
    }
  
    else if (airread>400 && airread<=700)
    {
      Serial.println("High pollution!");
    }
  
    else if (airread>700)
    {
        looper=30;
        Serial.println("Move to Fresh Air! Force signal active.");
        
        // set 9 S LED blink warning
        while(looper>=1)
        {
            delay(100);
            digitalWrite(RED,LOW);
            delay(100);
            digitalWrite(RED,HIGH);
            delay(100);
            digitalWrite(RED,LOW);
            looper--;
      }
  }
  
    delay(5000);
}
   
void loop()
{
    AirQuality();
}
