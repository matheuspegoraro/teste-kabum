<?php
  session_start();

  include("utils/header.php");
?>

  

      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Clientes</h6>
                <button class="btn btn-success float-right" data-toggle="modal" data-target=".btn-new-client">Adicionar Cliente</button>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <table class="table">
                  <thead>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Celular</th>
                    <th>Ações</th>
                  </thead>
                  <tbody id="clients">

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="modal fade btn-new-client" id="modalNewClient" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar novo cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="modal-body">

          <div class="form-group">
            <label for="name">Nome do cliente</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="birth">Data de nascimento</label>
            <input type="text" class="form-control date" name="birth" id="birth">
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control cpf" name="cpf" id="cpf">
          </div>
          <div class="form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control rg" name="rg" id="rg">
          </div>
          <div class="form-group">
            <label for="celphone">Telefone</label>
            <input type="text" class="form-control celphone" name="celphone" id="celphone">
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-success" type="button" onclick="newClient();">Adicionar</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade btn-edit-client" id="modalEditClient" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alterar cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="modal-body">

          <input type="hidden" name="idClient" id="idClient">

          <div class="form-group">
            <label for="name">Nome do cliente</label>
            <input type="text" class="form-control" name="editName" id="editName">
          </div>
          <div class="form-group">
            <label for="birth">Data de nascimento</label>
            <input type="text" class="form-control date" name="editBirth" id="editBirth">
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control cpf" name="editCpf" id="editCpf">
          </div>
          <div class="form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control rg" name="editRg" id="editRg">
          </div>
          <div class="form-group">
            <label for="celphone">Telefone</label>
            <input type="text" class="form-control celphone" name="editCelphone" id="editCelphone">
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-success" type="button" onclick="editClient();">Alterar</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade btn-addresses-client" id="modalAddressesClient" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Endereços do Cliente</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
        <div class="modal-body">

          <input type="hidden" name="idClientAddress" id="idClientAddress">

          <div class="card">
            <div class="card-body">

              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="address">Endereço</label>
                    <input type="text" class="form-control" name="address" id="address">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="city">Cidade</label>
                        <input type="text" class="form-control" name="city" id="city">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="state">Estado</label>
                        <input type="text" class="form-control" name="state" id="state">
                      </div>
                    </div>
                  </div>

                  <button type="button" class="btn btn-success" onclick="newAddress();">Adicionar</button>
                </div>
              </div>

              <table class="table">
                <thead>
                  <th>Endereço</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Ações</th>
                </thead>
                <tbody id="addresses">

                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
</div>

<script>
  var clients = [];

  $(() => {
    $('.date').mask('00/00/0000');
    $('.celphone').mask('(00) 00000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.rg').mask('00.000.000-0', {reverse: true});
  });

  $(() => {
    $.get('../backend/routes/IsLoggedIn.php', data => {
      if (data.logged === 0)
        window.location.href = "login.php";
    });

    listClients();
  });

  function listClients() {
    $.get('../backend/routes/ListClients.php', data => {
      clients = JSON.parse(data);
      let html = '';

      clients.map(client => {
        html += `
          <tr>
            <td>${client.name}</td>
            <td>${convertDate(client.birth)}</td>
            <td>${client.CPF}</td>
            <td>${client.RG}</td>
            <td>${client.celphone}</td>
            <td>
              <button class="btn btn-primary btn-sm" type="button" onclick="loadAddresses(${client.id_client})">Endereços</button>
              <button class="btn btn-warning btn-sm" type="button" onclick="loadClient(${client.id_client})">Editar</button>
              <button class="btn btn-danger btn-sm" type="button" onclick="deleteClient(${client.id_client})">Excluir</button>
            </td>
          </tr>
        `;
      });

      $("#clients").html(html);
    });
  }

  function newClient() {
    let name = $("#name").val();
    let birth = $("#birth").val();
    let cpf = $("#cpf").val();
    let rg = $("#rg").val();
    let celphone = $("#celphone").val();

    $.post('../backend/routes/CreateClient.php', {
      name, birth, cpf, rg, celphone
    }).then(data => {
      let client = JSON.parse(data);
      
      if(client.registered == 1) {
        toastr.success('Cliente cadastrado com sucesso!');
        listClients();
        $("#modalNewClient").modal("toggle");
      } else {
        toastr.error('Falha ao cadastrar cliente!');
      }

      resetForms();
    });
  }

  function deleteClient(idClient) {
    $.post('../backend/routes/DeleteClient.php', {
      idClient
    }).then(data => {
      let client = JSON.parse(data);
      
      if(client.deleted == 1) {
        toastr.success('Cliente excluído com sucesso!');
        listClients();
      } else {
        toastr.error('Falha ao excluir cliente!');
      }
    });
  }

  function loadClient(idClient) {
    $("#modalEditClient").modal("toggle");
    
    let client = clients.filter(client => client.id_client == idClient)[0];
    $("#idClient").val(client.id_client);
    $("#editName").val(client.name);
    $("#editBirth").val(client.name);
    $("#editCpf").val(client.name);
    $("#editRg").val(client.name);
    $("#editCelphone").val(client.name);
  }

  function editClient() {
    let idClient = $("#idClient").val();
    let name = $("#editName").val();
    let birth = $("#editBirth").val();
    let cpf = $("#editCpf").val();
    let rg = $("#editRg").val();
    let celphone = $("#editCelphone").val();

    $.post('../backend/routes/EditClient.php', {
      idClient, name, birth, cpf, rg, celphone
    }).then(data => {
      let client = JSON.parse(data);
      
      if(client.edited == 1) {
        toastr.success('Cliente editado com sucesso!');
        listClients();
        $("#modalEditClient").modal("toggle");
      } else {
        toastr.error('Falha ao editar cliente!');
        $("#modalEditClient").modal("toggle");
      }

      resetForms();
    });
  }

  function listAddresses(idClient) {
    $("#idClientAddress").val(idClient);

    $.get(`../backend/routes/ListAddresses.php?idClient=${idClient}`, data => {
      let addresses = JSON.parse(data);
      let html = '';

      addresses.map(address => {
        html += `
          <tr>
            <td>${address.address}</td>
            <td>${address.city}</td>
            <td>${address.state}</td>
            <td>
              <button class="btn btn-danger btn-sm" type="button" onclick="deleteAddress(${idClient}, ${address.id_address});">Excluir</button>
            </td>
          </tr>
        `;
      });

      $("#addresses").html(html);
    });
  }

  function deleteAddress(idClient, idAddress) {
    $.post('../backend/routes/DeleteAddress.php', {
      idAddress
    }).then(data => {
      let address = JSON.parse(data);
      
      if(address.deleted == 1) {
        toastr.success('Endereço excluído com sucesso!');
        listAddresses(idClient);
      } else {
        toastr.error('Falha ao excluir endereço!');
      }
    });
  }

  function newAddress() {
    let idClient = $("#idClientAddress").val();
    let address = $("#address").val();
    let city = $("#city").val();
    let state = $("#state").val();

    $.post('../backend/routes/CreateAddress.php', {
      idClient, address, city, state
    }).then(data => {
      let address = JSON.parse(data);
      
      if(address.registered == 1) {
        toastr.success('Endereço cadastrado com sucesso!');
        listAddresses(idClient);
      } else {
        toastr.error('Falha ao cadastrar endereço!');
      }

      resetForms();
    });
  }

  function resetForms() {
    $("#idClient").val("");
    $("#editName").val("");
    $("#editBirth").val("");
    $("#editCpf").val("");
    $("#editRg").val("");
    $("#editCelphone").val("");
    $("#name").val("");
    $("#birth").val("");
    $("#cpf").val("");
    $("#rg").val("");
    $("#celphone").val("");
    $("#idClientAddress").val("");
    $("#address").val("");
    $("#city").val("");
    $("#state").val("");
  }

  function loadAddresses(idClient) {
    $("#modalAddressesClient").modal("toggle");
    listAddresses(idClient);
  }

  function convertDate(date) {
    return `${date.substring(8, 10)}/${date.substring(5, 7)}/${date.substring(0, 4)}`;
  }

  $( "#button-container button" ).on( "click", function( event ) {
    hiddenBox.show();
  });
</script>

<?php
  include("utils/footer.php");
?>