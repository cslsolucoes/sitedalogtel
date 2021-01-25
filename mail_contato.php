<?php
  function EnviarEmail($assunto, $nomeRemente, $emailRemente, $emailDestino, $msgHTML) {
    if($emailDestino <> '') {
      $remetente = "$nomeRemente <$emailRemente>"; 
      $headers = "Content-Type: text/html; charset=utf-8\n";
      $headers.="From: $remetente\n"; 
      $headers.="Reply-To: $emailRemente\n"; 
      $headers.="Subject: $assunto\n"; 
      $headers.="Return-Path: $remetente\n"; 
      $headers.="MIME-Version: 1.0\n"; 
      $headers.="X-Priority: 3\n"; 
      mail($emailDestino, $assunto, $msgHTML, $headers);
    }
  }

	$mensagem = "<b>FORMULÁRIO DE VENDAS - 	LOGTEL</b> <br /> <br />";
	$mensagem.= "<b>Nome:</b> ".$_POST['nome']." <br />";
	$mensagem.= "<b>E-mail:</b> ".$_POST['email']." <br />";
	$mensagem.= "<b>Telefone:</b> ". $_POST['telefone']."  <br />";
	$mensagem.= "<b>CPF:</b> ". $_POST['cpf']."  <br />";
  $mensagem.= "<b>Mensagem:</b> ". $_POST['mensagem']."  <br />";
	
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= 'From: contato@logtel.net.br';

	
	
	EnviarEmail('Contato via site', 'Formulario de vendas','contato@logtel.net.br', 'contato@logtel.net.br', $mensagem);
	
    echo "
    <script type='text/javascript'>
      alert('Sua mensagem foi enviada com sucesso!');
      window.location='http://www.logteltelecom.com.br/site';
    </script>
    ";
?>