#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#define CONSTANTE 10
void main(){

    srand((unsigned)time(NULL));//unsigned faz com que o valor seja absoluto.

    int aleatorio = rand() %3;//Gera uma numerp semi aleatório, baseado no tempo e no mod 3;
    char palavra[255];
    printf("%d",aleatorio);
    printf("\n \n \n%d",CONSTANTE);
    //Instrução
    printf("Digite uma palavra");
    //Limpa o burffer (entrada padrao=stanradinput, 0)
    setbuf(stdin,0);
    //Lê a String
    fgets(palavra,255,stdin);

    //"Limpa" as casas não utilizadas
    palavra[strlen(palavra)-1] = '\0';// O \0 determina o fim do vetor de char, isso para não ocuparmos espaço de memoria desnecessário.
    //Imprime
    printf("%s",palavra);

    system("pause");
}
