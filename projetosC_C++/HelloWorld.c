#include <stdio.h>
//Include inclui uma biblioteca <nomebiblioteca>, nesse caso, é utilizada para fazer entradas e saídas
#include <stdlib.h>//Pausa o programa.
#include <stdbool.h>//Com essa lib, podemos usar os tipos boleanos
//Função principal que por padrão retorna 0 se for int
int main(){
    //Printa na tela
    printf("Hello World !!!");
    int a = 5;
    float b;
    char c= 'G';
    bool d = true;
    printf("\n");
    printf("%d",a);//%d é necesário para imprimir a variável do int ou boolean, pois esses serão apresntados como 0 ou 1.
    printf("\n");
    printf("Digite um valor para b");
    printf("\n");
    scanf("%f",&b);
    printf("%.2f",b);//Usando o %.2f, é possivel contrar o numero de casas que serão impressas depois dadvirgula
    printf("\n");
    printf("%c",c);
    printf("\n");
    scanf(" %c",&c);// Espaço necessário para ler um caractere, & atribui o valor ao variável.
    printf("\n");
    printf(" %c",c);
    printf("\n Valor de d:");
    printf("\n");
    printf("%d",d);
    printf("\n");
    system("pause");//Para a aexecução do programa. Sem isso, ao executar o app ele fechar rapidamente.

    return 0;

}
