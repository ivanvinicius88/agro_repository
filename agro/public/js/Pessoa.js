$(document).ready(function() {
    buscaDados();

    function buscaDados() {
      $.getJSON("http://localhost:8000/api/pessoa/", function(data, status) {
        var sHtml = "";
        $.each(data, function(key, val) {
          sHtml +=  "<tr>"+
                    "<td>" + val.pescodigo   + "</td>"+
                    "<td>" + val.pesnome     + "</td>"+
                    "<td>" + val.pesidade    + "</td>"+
                    "<td>" + val.pescpf      + "</td>"+
                    "<td>" + val.pestelefone + "</td>"+
                    "<td>" +
                      "<button id='excluir' class='btn btn-danger mx-1' onclick='deletar(" + val.pescodigo + ")'>Excluir</button>" + 
                      "<button class='btn btn-primary'>Alterar</button>" +
                    "</td>"+
                   "</tr>";
        });

        $("#tabela").html(sHtml);
      });
    };

  /*  $("#alterar").click(function() {
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
    let iCodigo   = $("#codigo").val();
    let sNome     = $("#nome").val();
    let sIdade    = $("#idade").val();
    let sCpf      = $("#cpf").val();
    let sTelefone = $("#telefone").val();
  
    $.ajax({
      type: "POST",
      url: "http://localhost:8000/api/pessoa/",
      data: JSON.stringify ({pescodigo: iCodigo, pesnome : sNome, pesidade :sIdade , pescpf : sCpf, pestelefone : sTelefone}),
      success: function(data) {
        alert('Inserido com sucesso.')
        $("#codigo").val('');
        $("#nome").val('');
        $("#idade").val('');
        $("#cpf").val('');
        $("#telefone").val('');
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
            url: "http://localhost:8000/api/pessoa/"+iCodigo,
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