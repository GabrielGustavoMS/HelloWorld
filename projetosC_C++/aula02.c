#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#define CONSTANTE 10
void main(){

    srand((unsigned)time(NULL));//unsigned faz com que o valor seja absoluto.

    int aleatorio = rand() %3;//Gera uma numerp semi aleat�rio, baseado no tempo e no mod 3;
    char palavra[255];
    printf("%d",aleatorio);
    printf("\n \n \n%d",CONSTANTE);
    //Instru��o
    printf("Digite uma palavra");
    //Limpa o burffer (entrada padrao=stanradinput, 0)
    setbuf(stdin,0);
    //L� a String
    fgets(palavra,255,stdin);

    //"Limpa" as casas n�o utilizadas
    palavra[strlen(palavra)-1] = '\0';// O \0 determina o fim do vetor de char, isso para n�o ocuparmos espa�o de memoria desnecess�rio.
    //Imprime
    printf("%s",palavra);

    system("pause");
}
