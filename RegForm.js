function validateform()
{
    validate(); 

}

function validate()
{

    //First Name should only contain letters
    let Fname = document.MyForm.Fname.value;
    const letters = /^[A-Za-z]+$/;
    if(Fname == "" || !Fname.match(letters))
    {
        window.alert("OOPS!! Looks Like Your First Name Is Invalid ");
        Fname.focus();
        return false;
    }

    //Last Name should only contain letters
    let Lname = document.MyForm.Lname.value;
    if(Lname == "" || !Lname.match(letters))
    {
        window.alert("OOPS!! Looks Like Your Last Name Is Invalid ");
        Lname.focus();
        return false;
    }

    //Email ID cannot be empty
    let email = document.MyForm.email.value;
    if(email == "")
    {
        alert("Enter Valid Email ID");
        email.focus();
        return false;
    }

    //Password and Confirm Password should match
    let password = document.MyForm.password.value;
    let confirm_password = document.MyForm.confirm_password.value;

    if(password != confirm_password)
    {
        alert("OOPS!! Password and Confirm Password Do Not Match");
        confirm_password.focus();
        return false;
    }
   
    //Mobile Number limited to 10 digits and should only contain numeric value 
    let mobile = document.MyForm.mobile.value;
    if(isNaN(mobile))
    {
        alert("Invalid Mobile Number!! Please Enter only Numeric values");
        mobile.focus();
        return false;
    }

    //Date of Birth: Should be above 18 years
    let dob = document.MyForm.dob.value;
    let birthday = Date.parse(dob);
    var minutes = 1000 * 60;
    var hours = minutes * 60;
    var days = hours * 24;
    var years = days * 365;
    let birthdate = Math.round(birthday/years);  // will give total number of years from January 1, 1970  to selected Date

    var currentdate=new Date(); 
    let todaydate = Date.parse(currentdate);
    var curr_minutes = 1000 * 60;
    var curr_hours = curr_minutes * 60;
    var curr_days = curr_hours * 24;
    var curr_years = curr_days * 365;
    let today = Math.round(todaydate/curr_years);   // will give total number of years from January 1, 1970  to Today's Date

   
    let age = today - birthdate;      //Difference in years 

    if(dob == "")
    {
        alert("Please Enter Date Of Birth");
        dob.focus();
        return false;
    }
    else if(age < 18)
    {
        alert("OPPS!! You are not Old Enough \n You need to be atleast 18 years old to register");
        dob.focus();
        return false;
    }
    
    //Gender
    var gender = document.MyForm.Gender.value;
    var value;
    var i;
    for(i=0;i<gender.length;i++)
    {
        if(gender[i].checked == true)
        {
            value == true;
            break;
        }
        else
        {
            value == false;
        }
    }
    if(value == false)
    {
        alert("Please Select Your Gender")
    }
    

    //Pin Code
    let pin = document.MyForm.pin.value;
    if(isNaN(pin))
    {
        alert("Invalid Pin Code!! Please Enter only Numeric values");
        pin.focus();
        return false;
    }

    //Qualification
    let quali = document.MyForm.getElementByName('qualification');
    if(quali.selectedIndex == 0)
    {
        alert("Please Select Your Qualification");
        qualification.focus();
        return false;
    }
}
     
