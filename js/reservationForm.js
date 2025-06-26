function enableButton1()
{
   var checkBox = document.getElementById("consentR").checked;
   if(checkBox==true)
   {
     document.getElementById("button").disabled=false;
   }
   else
   {
     document.getElementById("button").disabled=true;
   }
}