#include <stdio.h>
//Include inclui uma biblioteca <nomebiblioteca>, nesse caso, � utilizada para fazer entradas e sa�das
#include <stdlib.h>//Pausa o programa.
#include <stdbool.h>//Com essa lib, podemos usar os tipos boleanos
//Fun��o principal que por padr�o retorna 0 se for int
int main(){
    //Printa na tela
    printf("Hello World !!!");
    int a = 5;
    float b;
    char c= 'G';
    bool d = true;
    printf("\n");
    printf("%d",a);//%d � neces�rio para imprimir a vari�vel do int ou boolean, pois esses ser�o apresntados como 0 ou 1.
    printf("\n");
    printf("Digite um valor para b");
    printf("\n");
    scanf("%f",&b);
    printf("%.2f",b);//Usando o %.2f, � possivel contrar o numero de casas que ser�o impressas depois dadvirgula
    printf("\n");
    printf("%c",c);
    printf("\n");
    scanf(" %c",&c);// Espa�o necess�rio para ler um caractere, & atribui o valor ao vari�vel.
    printf("\n");
    printf(" %c",c);
    printf("\n Valor de d:");
    printf("\n");
    printf("%d",d);
    printf("\n");
    system("pause");//Para a aexecu��o do programa. Sem isso, ao executar o app ele fechar rapidamente.

    return 0;

}
