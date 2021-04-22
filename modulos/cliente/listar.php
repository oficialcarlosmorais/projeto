<?php
    include("classes/Cliente.class.php");
    $clientes = Cliente::listar();

if($clientes){
?>
<div class="box">
    <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Comandos</th>
                </tr>
<?php
    foreach($clientes as $cliente){
?>
 <!--   <tr>
        <td><?php echo $cliente->getId();?></td>
        <td><?php echo $cliente->getNome();?></td>
        <td><?php echo $cliente->getEmail();?></td>
        <td><?php echo $cliente->getTelefone();?></td>
        <td><a href="?modulo=cliente&acao=editar&id=<?php echo $cliente->getId();?>">Editar</a></td>
        <td><a href="?modulo=cliente&acao=excluir&id=<?php echo $cliente->getId();?>">Excluir</a></td>
        
    </tr>
-->


           <!-- /.box-header -->
            
                <tr>
                  <td><?php echo $cliente->getId();?></td>
                  <td><?php echo $cliente->getNome();?></td>
                  <td><?php echo $cliente->getEmail();?></td>
                  <td><?php echo $cliente->getTelefone();?></td>
                  <td>
                    <a href="?modulo=cliente&acao=editar&id=<?php echo $cliente->getId();?>"><button class="btn btn-warning" title="Editar"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                    <a href="?modulo=cliente&acao=excluir&id=<?php echo $cliente->getId();?>"><button class="btn btn-danger" title="Excluir"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                  </td>
                </tr>
             
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
                </table>
            </div>