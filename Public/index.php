<?php 


Class Aluno{
    public int $IdadeAluno;

 public function __construct(int $Idade) {
        $this->idade = $Idade;
 }

}

$aluno = new Aluno(19);


if($aluno->$IdadeAluno >= 18){
    echo "<p>O aluno é maior de idade</p>";
}
else{
    echo "<p>O aluno não é maior de idade</p>";
}

?>

