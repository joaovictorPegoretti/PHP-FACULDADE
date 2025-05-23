<?php 


Class Aluno{
    public int $IdadeAluno;
}

$aluno = new Aluno(19);


if($aluno -> $IdadeAluno >= 18){
    echo "<p>O aluno é maior de idade</p>";
}
else{
    echo "<p>O aluno não é maior de idade</p>";
}

?>

