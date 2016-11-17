console.log('Loaded!');
	function validateForm() 
		{
			var x = document.ins.rno.value;
			if (x == null || x == "") 
			{
				alert("Please enter a roll numsber.");
				document.ins.rno.focus() ;
				return false;
			}	
		}
    function validateFormi() {
    var x = document.ext.rnog.value;
    if (x == null || x == "") {
        alert("Please enter a roll number.");
        document.ext.rnog.focus() ;
        return false;
    }
    }