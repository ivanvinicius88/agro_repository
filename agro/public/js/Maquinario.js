$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/maquinario/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml +=  "<tr>"+
                      "<td>" + val.maqcodigo    + "</td>" +
                      "<td>" + val.maqdescricao + "</td>" +
                      "<td>" + val.maqano       + "</td>" +
                      "<td>" + val.maqvalor     + "</td>" +
                      "<td>" +
                        "<button id='excluir' class='btn btn-danger mx-1' onclick='deletar(" + val.maqcodigo + ")'>Excluir</button>" + 
                        "<button class='btn btn-primary'>Alterar</button>" +
                      "</td>" +
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
    let sAno       = $("#ano").val();
    let sValor     = $("#valor").val();
  
    $.ajax({
      type: "POST",
      url: "http://localhost:8000/api/maquinario/",
      data: JSON.stringify ({maqcodigo: iCodigo, maqdescricao : sDescricao, maqano :sAno , maqvalor : sValor}),
      success: function(data) {
        alert('Inserido com sucesso.')
        $("#codigo").val('');
        $("#descricao").val('');
        $("#ano").val('');
        $("#valor").val('');
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
            url: "http://localhost:8000/api/maquinario/"+iCodigo,
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
