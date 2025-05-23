<?php 


Class Aluno{
    public int $IdadeAluno;
    public array $Cores;

 public function __construct(int $idadeAluno, array $cores) {
        $this->idade = $idadeAluno;
        $this->Cor = $cores;
 }

}

$aluno = new Aluno(19, ["vermelho", "verde", "azul", "amarelo", "roxo"]);


if($aluno->idade >= 18){
    echo "<p>O aluno é maior de idade</p>";
}
else{
    echo "<p>O aluno não é maior de idade</p>";
}

echo "<p>Lista de cores</p>";
foreach($aluno->Cor as $lista){
    echo "<p>Cores:</p>" . $lista;
}

?>

