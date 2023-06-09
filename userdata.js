function submit()
        {
            var Nam=reg.Nam.value;
            var Mobile=reg.Mobile.value;
            var email=reg.email.value;
            var comp=reg.Company.value;
            var city=reg.City.value;
            var state=reg.State.value;
            var Comment=reg.comment.value;
            console.log("Hello KD")
            console.log("Hello "+Nam)
            if(Nam==""){
                console.log("jhd")
                alert("Please insert Your name");
                document.reg.Nam.focus();
                return false;
            }
            if(city==""){
                alert("Please Mention Your city");
                document.reg.City.focus();
                return false;
            }
            if(state==""){
                alert("Please mention your state");
                document.reg.State.focus();
                return false;
            }
            if(Mobile==""){
                alert("Please Enter mobile number");
                document.reg.Mobile.focus();
                return false;
            }
            if(isNaN(Mobile)==true){
                alert("Please Enter valid phone number");
                document.reg.Mobile.focus();
                return false;
            }
            if(Mobile.length!=10 ){
                alert("Please Enter a 10 digit phone number");
                document.reg.Mobile.focus();
                return false;
            }           
            if(email==""){
                alert("Please Enter your E-mail ID");
                document.reg.email.focus();
                return false;
            }    
            if(Comment==""){
                alert("Please Leave Us a Comment");
                document.reg.comment.focus();
                return false;
            }
        }

function cancel()
{
    
    con=confirm('Your Registration will be canceled do you want to continue?')
    if(con==true){
        reg.Nam.value="";
        reg.Company.value="";
        reg.City.value="";
        reg.Mobile.value="";
        reg.email.value="";
        reg.comment.value="";
        reg.State.value="";
        document.querySelector(".contact-us-iframe").style.display="none"
    }
}