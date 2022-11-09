<?php
include_once "conexao_beauty.php";
$comandoSql = "select * from agenda
as A inner join cliente as C on
a.id_cliente = c.id_cliente inner join
servico as s on s.id_servico = a.id_servico";
$resultado = mysqli_query($con, $comandoSql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8' />

  <!-- for Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  <!-- for Bootstrap 4 -->
  <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>

  <link href='../lib/main.css' rel='stylesheet' />
  <link href='style.css' rel='stylesheet' />
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' rel='stylesheet' />
  <script src='../lib/main.js'></script>
  <script src='js/theme-chooser.js'></script>
  <script src='../lib/locales/pt-br.js'></script>
  <script src="../tela/scripts.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar;

      initThemeChooser({

        init: function(themeSystem) {
          calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: themeSystem,
            headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            locale: 'pt-br',
            //initialDate: '2020-09-12',
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true, // allow "more" link when too many events
            // showNonCurrentDates: false,
            select: function(info) {
              //alert('data selecionada: ' + info.startStr.toLocaleString());
              $('#janelamodal2').modal('show');
              $('#janelamodal2 #data').val(info.start.toLocaleString());
            },
            events: [
              <?php
              while ($dados = mysqli_fetch_array($resultado)) {
              ?> {
                  id: '<?php echo $dados['id_agenda']; ?>',
                  title: '<?php echo $dados['nome_cliente'] . " - " . $dados['nome_servico']; ?>',
                  color: '<?php echo $dados['corstatus_agenda']; ?>',
                  start: '<?php echo $dados['data_agenda']; ?>',
                  description: 'teste',
                },
              <?php
              }
              ?>

            ],



            eventClick: function(info) {

              info.jsEvent.preventDefault();
              $('#janelamodal #cliente').text(info.event.title);
              $('#janelamodal #servico').text(info.event.description);
              $('#janelamodal #horario').text(info.event.start);
              $('#janelamodal').modal('show')
            }
          });
          calendar.render();
        },

        change: function(themeSystem) {
          calendar.setOption('themeSystem', themeSystem);
        }

      });

    });
  </script>

</head>

<body>

  <div id='top'>

    <div class='left'>

      <div id='theme-system-selector' class='selector'>
        Theme System:
        <select>
          <option value='bootstrap5' selected>Bootstrap 5</option>
          <option value='bootstrap'>Bootstrap 4</option>
          <option value='standard'>unthemed</option>
        </select>
      </div>

      <div data-theme-system="bootstrap,bootstrap5" class='selector' style='display:none'>
        Theme Name:
        <select>
          <option value='' selected>Default</option>
          <option value='cerulean'>Cerulean</option>
          <option value='cosmo'>Cosmo</option>
          <option value='cyborg'>Cyborg</option>
          <option value='darkly'>Darkly</option>
          <option value='flatly'>Flatly</option>
          <option value='journal'>Journal</option>
          <option value='litera'>Litera</option>
          <option value='lumen'>Lumen</option>
          <option value='lux'>Lux</option>
          <option value='materia'>Materia</option>
          <option value='minty'>Minty</option>
          <option value='pulse'>Pulse</option>
          <option value='sandstone'>Sandstone</option>
          <option value='simplex'>Simplex</option>
          <option value='sketchy'>Sketchy</option>
          <option value='slate'>Slate</option>
          <option value='solar'>Solar</option>
          <option value='spacelab'>Spacelab</option>
          <option value='superhero'>Superhero</option>
          <option value='united'>United</option>
          <option value='yeti'>Yeti</option>
        </select>
      </div>

      <span id='loading' style='display:none'>loading theme...</span>

    </div>

    <div class='right'>
      <span class='credits' data-credit-id='bootstrap-standard' style='display:none'>
        <a href='https://getbootstrap.com/docs/3.3/' target='_blank'>Theme by Bootstrap</a>
      </span>
      <span class='credits' data-credit-id='bootstrap-custom' style='display:none'>
        <a href='https://bootswatch.com/' target='_blank'>Theme by Bootswatch</a>
      </span>
    </div>

    <div class='clear'></div>
  </div>

  <div id='calendar'></div>

  <div class="modal fade" id="janelamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agenda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <dl class="row">
            <dt class="col-sm-3">Cliente: </dt>
            <dd class="col-sm-9" id="cliente"></dd>

            <dt class="col-sm-3">Serviço: </dt>
            <dd class="col-sm-9" id="servico"></dd>

            <dt class="col-sm-3">Horário: </dt>
            <dd class="col-sm-9" id="horario"></dd>
          </dl>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="janelamodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Agenda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="cadastra_agenda_beauty.php" class="form" name="form" id="form" method="POST" enctype="multipart/form-data">
            <div class="form-group" id="form-nome">
              <?php
              include "funcoes_agenda.php";
              listaClienteSelect();
              ?>
              <i class="fas fa-exclamation-circle"></i>
              <i class="fas fa-check-circle"></i>
              <small>Mensagem de erro</small>
            </div>

            <div class="form-group" id="form-funcionario">
              <?php
              funcionarioSelect();
              ?>
              <i class="fas fa-exclamation-circle"></i>
              <i class="fas fa-check-circle"></i>
              <small>Mensagem de erro</small>
            </div>

            <div class="form-group" id="form-servico">
              <?php
              servicoSelect();
              ?>
              <i class="fas fa-exclamation-circle"></i>
              <i class="fas fa-check-circle"></i>
              <small>Mensagem de erro</small>
            </div>

            <div class="form-group" id="form-data">
              <input type="text" name="data" id="data" class="form-control rounded-left" onkeyup="mascara_data(this, this.value)" maxlength="10">
              <i class="fas fa-exclamation-circle"></i>
              <i class="fas fa-check-circle"></i>
              <small>Mensagem de erro</small>
            </div>

            <div class="form-group" id="form-horario">
              <input type="time" name="horario" id="horario" class="form-control rounded-left">
              <i class="fas fa-exclamation-circle"></i>
              <i class="fas fa-check-circle"></i>
              <small>Mensagem de erro</small>
            </div>

            <div class="form-group" id="form-obs">
              <input type="text" name="obs" id="obs" class="form-control rounded-left" placeholder="Observações">
              <i class="fas fa-exclamation-circle"></i>
              <i class="fas fa-check-circle"></i>
              <small>Mensagem de erro</small>
            </div>
            <div class="modal-footer">
              <div class="col-sm-10">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="cadastrar" id="cadastrar" class="btn btn-success" value="cadastrar">Cadastrar</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

</body>


</html>