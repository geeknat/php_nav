**CONSUMING NAVISION WEB SERVICES WITH PHP**

   This sample demonstrates how to use PHP to consume web services
   both Pages and CodeUnits
   
   First, clone this repo to a preferred location
   
   Then open Config.php at the root,and input your details
   
    const PROJECT_NAME = "";

    //e.g http://YOUR_URL/DynamicsNAV90/WS/SOME_VALUE/Page/
    const NAVISION_PAGE_BASE_URL = "";

    //e.g http://YOUR_URL/DynamicsNAV90/WS/SOME_VALUE/CodeUnit/
    const NAVISION_CODEUNIT_BASE_URL = "";
    
    const USERPWD = "user:password";
    
   You can now check on the samples folder for some great 
   samples classes
   
   Check index.php file on how these sample classes are being called, 
   depending on the request.
   
   Sample request
   
   `http://your_url/project_location/?request=YOUR_REQUEST`
    
    REQUEST CAN BE ANY OF THE FOLLOWING
    
    1.page_create -> Calls the SamplePageCreate class
    2.codeunit -> Calls the SampleCodeUnit class
  
  _**MADE WITH LOVE BY @GeekNat**_
  
   
   
   
   
       
       
   
   
