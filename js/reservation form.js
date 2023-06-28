//submit button enabler
function enableButton()
{
    if(document.getElementById("certification").checked)
    {
        document.getElementById("submitBtn").disabled = false;
    }
    else
    {
        document.getElementById("submitBtn").disabled = true;
    }
}
