const cuestion_1 = () => {
    const radioButtons = document.getElementsByName('cuestion_1');
    const cuestion_1_a = document.getElementById('cuestion_1_a');
    cuestion_1_a.style.display = 'none';

    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                if (this.value === "Si") {
                    cuestion_1_a.style.display = 'block';
                } else if (this.value === "No") {
                    cuestion_1_a.style.display = 'none';
                }
            }
        });
    });
};
const cuestion_2 = () => {
    const radioButtons = document.getElementsByName('cuestion_2');
    const cuestion_2_a = document.getElementById('cuestion_2_a');
    const cuestion_2_b = document.getElementById('cuestion_2_b');

    cuestion_2_a.style.display = 'none';
    cuestion_2_b.style.display = 'none';


    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                if (this.value === "Si") {
                    cuestion_2_a.style.display = 'block';
                    cuestion_2_b.style.display = 'none';

                } else if (this.value === "No") {
                    cuestion_2_b.style.display = 'block';
                    cuestion_2_a.style.display = 'none';
                }
            }
        });
    });
};

const cuestion_6 = () => {
    const radioButtons = document.getElementsByName('cuestion_6');
    const cuestion_6_a = document.getElementById('cuestion_6_a');
    const cuestion_6_b = document.getElementById('cuestion_6_b');
    const cuestion_6_c = document.getElementById('cuestion_6_c');


    cuestion_6_a.style.display = 'none';
    cuestion_6_b.style.display = 'none';
    cuestion_6_c.style.display = 'none';



    radioButtons.forEach(function(radioButton) {
        radioButton.addEventListener('change', function() {
            if (this.checked) {
                if (this.value === "Si") {
                    cuestion_6_a.style.display = 'block';
                    cuestion_6_b.style.display = 'block';
                    cuestion_6_c.style.display = 'block';


                } else if (this.value === "No") {
                    cuestion_6_a.style.display = 'none';
                    cuestion_6_b.style.display = 'none';
                    cuestion_6_c.style.display = 'none';
                }
            }
        });
    });
};

cuestion_1();
cuestion_2();
cuestion_6();
