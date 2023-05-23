<h1 align="center"> learning-php </h1>

<h4 align="center"> 
    :construction:  Projeto em construção  :construction:
</h4>

![Badge](https://img.shields.io/static/v1?label=php&message=7.0.9&color=D2691E&style=%3CSTYLE%3E&logo=%3CLOGO%3E)

*comentários com //

!php é fracamente tipada

*declarar uma variável em php começa com $

*para ver o tipo de dado dessa variável, ao invés de usar echo usamos var_dump:

  Assim ele mostra o tipo de dado, o tamanho que ele gastou e o valor que está  nessa variável.

*Camel case:
  escrever variáveis do tipo "anoNascimento", "dataCompra"
  
 *Limpar variáveis:
  unset($variavel);
  
 *if:
  if(isset($variavel)){}
  
  está verificando a existência da variável em questão
  
  *Concatenação:
    para juntar duas variáveis como $nome e $sobrenome criamos outra variável que receberá a união de valores.
    
    $nomeCompleto = $nome . $sobrenome
    ou
    $nomecompleto = $nome. " " .$sobrenome;

  *Arrays Super Globais

	$nome = $_GET["a"]; //vou receber uma variavel chamada a

	var_dump($nome);

	Ao rodar o código acima no localhost ocorre um erro. No link que buscamos (ex: http://localhost//learning-php/arrays-superglobais.php) precisamos inserir os valores que estou mandando para o endereço de página, as variáveis (query string). Colocamos uma ? para separar.

http://localhost//learning-php/arrays-superglobais.php?a=123

!embora 123 seja numero, o tipo de dado impresso no var_dump é string, porque toda informação que vir pot GET será string.
	para que seja número é preciso fazer uma conversão (quest)

	$nome = (int)$_GET["a"]; //vou receber uma variavel chamada a em int

	var_dump($nome);
	

*Se fossemos receber mais um tipo de variável, no link ficaria:

http://localhost//learning-php/arrays-superglobais.php?a=123&b=456

!utilizamos &


*LINKS: protocolo > dominio > path > query string (parametros)




