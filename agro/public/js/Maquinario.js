$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/maquinario/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml +=  "<tr><td>" + val.maqcodigo + 
                    "</td><td>" + val.maqdescricao + 
                    "</td><td>" + val.maqano + 
                    "</td> <td>" + val.maqvalor +  
                    "</td><td><i class='far fa-edit text-danger mx-1 my-1'></i>&nbsp;<i class='fas fa-trash text-danger my-1 mx-1'></i></td></tr>";
        });

        $("#tabela").html(sHtml);
      });
    };

   /* $("#gravar").click(function() {
      let sNome = $("#nome").val();

      //enviado
      $.ajax({
        type: "POST",
        url: "http://localhost:41071/pessoa",
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          //alert("data: " + data);
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
    });

    $("#excluir").click(function() {
      let iCodigo = $("#codigo").val();

      if(iCodigo == "") {

      } else {
        //enviado
      $.ajax({
        type: "DELETE",
        url: "http://localhost:41071/pessoa/"+ iCodigo,
        success: function(data) {
          alert("Excluido com Sucesso!");
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
      }

    });

    $("#alterar").click(function() {
      let iCodigo = $("#codigo").val();
      let sNome = $("#nome").val();

      if(iCodigo == "" || sNome == "") {

      } else {
        //enviado
      $.ajax({
        type: "PATCH",
        url: "http://localhost:41071/pessoa/"+ iCodigo,
        data: JSON.stringify ({nome: sNome}),
        success: function(data) {
          alert("Alterado com Sucesso!");
        },
        contentType: "application/json",
        dataType: "json"
      }).then(res => {
        $("#buscar").click();
      });
      }

    }); */

  });
