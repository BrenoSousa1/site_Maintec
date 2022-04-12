    const cor1 = document.getElementById("cor1"); // Cor 1
        const cor2 = document.getElementById("cor2"); // Cor 2
        const cor3 = document.getElementById("cor3"); // Cor 3
        const cor4 = document.getElementById("cor4"); // Cor 4
        const cor5 = document.getElementById("cor5"); // Cor 5
        const imagem = document.getElementById("fotoUpload"); //Input imagem

        function medir() {
          if (imagem.files[0].size > 2 * 1024 * 1024) {
            alert("Arquivo muito grande!!");
            imagem.value = "";
          }
        };

        // Altera a capa para a cor 1
        cor1.addEventListener("click", function() {
          if (capa.className != "capa") {
            capa.classList.remove("capa2");
            capa.classList.remove("capa3");
            capa.classList.remove("capa4");
            capa.classList.remove("capa5");
            capa.classList.add("capa");
            document.getElementById("corCapa1").checked = true;
          }
        });
        // Altera a capa para a cor 2
        cor2.addEventListener("click", function() {
          if (capa.className != "capa2") {
            capa.classList.remove("capa");
            capa.classList.remove("capa2");
            capa.classList.remove("capa3");
            capa.classList.remove("capa4");
            capa.classList.add("capa2");
            document.getElementById("corCapa2").checked = true;
          }
        });
        // Altera a capa para a cor 3
        cor3.addEventListener("click", function() {
          if (capa.className != "capa3") {
            capa.classList.remove("capa");
            capa.classList.remove("capa2");
            capa.classList.remove("capa4");
            capa.classList.remove("capa5");
            capa.classList.add("capa3");
            document.getElementById("corCapa3").checked = true;
          }
        });
        // Altera a capa para a cor 4
        cor4.addEventListener("click", function() {
          if (capa.className != "capa4") {
            capa.classList.remove("capa");
            capa.classList.remove("capa2");
            capa.classList.remove("capa3");
            capa.classList.remove("capa5");
            capa.classList.add("capa4");
            document.getElementById("corCapa4").checked = true;
          }
        });
        // Altera a capa para a cor 5
        cor5.addEventListener("click", function() {
          if (capa.className != "capa5") {
            capa.classList.remove("capa");
            capa.classList.remove("capa2");
            capa.classList.remove("capa3");
            capa.classList.remove("capa4");
            capa.classList.add("capa5");
            document.getElementById("corCapa5").checked = true;
          }
        });