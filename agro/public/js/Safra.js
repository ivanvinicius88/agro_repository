$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/safra/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml +=  "<tr>"+
                      "<td>" + val.pescodigo    + "</td>" + 
                      "<td>" + val.lavcodigo    + "</td>" + 
                      "<td>" + val.maqcodigo    + "</td>" +
                      "<td>" + val.safcodigo    + "</td>" +
                      "<td>" + val.safdescricao + "</td>" + 
                      "<td>" + val.safano       + "</td>" +
                      "<td>" +
                        "<button id='excluir' class='btn btn-danger mx-1' onclick='deletar(" + val.safcodigo + ")'>Excluir</button>" + 
                        "<button class='btn btn-primary'>Alterar</button>"+
                      "</td>"+
                    "</tr>";
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


  function deletar(iCodigo) {
    if(!iCodigo) {
      alert('Informe um Registro.');
    } else {
        $.ajax({
            type: "DELETE",
            url: "http://localhost:8000/api/safra/"+iCodigo,
            success: function(data) {
              alert("Registro Excluido com Sucesso!");
            },
            contentType: "application/json",
            dataType: "json"
        }).then(res => {
            $("#buscar").click();
        });
    }
}