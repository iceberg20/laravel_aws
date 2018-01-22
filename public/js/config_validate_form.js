    function validadte() {
        var x;
        x = document.getElementById("hours").value;

        if (isNaN(x) || x <1 || x > 24) {
            alert("Input not valid");
        } else {
            alert("Input OK");
        }
    }