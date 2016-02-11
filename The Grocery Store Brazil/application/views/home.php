<div id="homebody">
    <div class="alinhado-centro borda-base espaco-vertical">
        <h3>Seja bem vindo a nossa loja.</h3>
        <p>A melhor loja de comida, especiarias e temperos. Compre online e receba em casa.</p>
        <?php echo anchor(base_url("cadastro"),"Cadastre-se",array("class"=>"btn btn-medium btn-success"))?>
    </div>
  <div class="row-fluid">
      <?php
      $contador = 0;
      foreach($destaques as $destaque){
          $contador++;
          echo "<div class='span4 caixacategoria'>" .
          heading($destaque->titulo,3);
          if(is_file("assets/img/produtos/".md5($destaque->id).".jpg")){
			echo img("assets/img/produtos/".md5($destaque->id).".jpg");
		  }
		  echo "<p>". word_limiter($destaque->descricao,20) ."</p>" .
            anchor(base_url("produto/".$destaque->id ."/". limpar($destaque->titulo)),"Ver produto", array('class'=>'btn')) .
          "</div>";
          if($contador%3 == 0){
              echo "</div><div class='row-fluid'>";
          }
      }
      ?>
  </div>  
</div>