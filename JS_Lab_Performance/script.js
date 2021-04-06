
  function validate() {
    const name= document.getElementById('name').value;
    if (name=="") {
        document.getElementById('msg').innerHTML="Name cannot be empty!";
        return false;
    } else {
        if(WordCount(name)<2){
            document.getElementById('msg').innerHTML="Name is too short!";
            return false;
        }
        else{
            
            return true;
        }
    }
}