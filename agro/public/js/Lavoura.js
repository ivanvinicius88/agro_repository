$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/lavoura/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml +=  "<tr>" + 
                      "<td>" + val.lavcodigo    + "</td>"+
                      "<td>" + val.lavdescricao + "</td>"+
                      "<td>" +
                        "<button id='excluir' class='btn btn-danger mx-1' onclick='deletar(" + val.lavcodigo + ")'>Excluir</button>" + 
                        "<button class='btn btn-primary'>Alterar</button>" +
                      "</td>"+
                    "</tr>";
        });
        $("#tabela").html(sHtml);
      });
    };

    /*
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

function adicionar(){
  let iCodigo    = $("#codigo").val();
  let sDescricao = $("#descricao").val();

  $.ajax({
    type: "POST",
    url: "http://localhost:8000/api/lavoura/",
    data: JSON.stringify ({lavcodigo: iCodigo, lavdescricao : sDescricao}),
    success: function(data) {
      alert('Inserido com sucesso.');
       $("#codigo").val('');
       $("#descricao").val('');
    },
    contentType: "application/json",
    dataType: "json"
  }).then(res => {
    $("#buscar").click();
  });
}



function deletar(iCodigo) {
    if(!iCodigo) {
      alert('Informe um Registro.');
    } else {
        $.ajax({
            type: "DELETE",
            url: "http://localhost:8000/api/lavoura/"+iCodigo,
            success: function(data) {
              alert("Registro Excluido com Sucesso. Pressione F5");
            },
            contentType: "application/json",
            dataType: "json"
        }).then(res => {
            $("#buscar").click();
        });
    }
}
