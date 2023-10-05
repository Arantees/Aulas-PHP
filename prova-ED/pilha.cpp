#define TAMANHO_PILHA 10
#include <iostream>
using namespace std;

struct Carro {
    string  placa;
    int     ano;
};

struct Pilha {
    Carro   data[TAMANHO_PILHA];
    int     contador;
};
/* Protótipos das funções. Desenvolver a partir da linha 59 */
void inicializar(Pilha *);
void estacionar(Pilha *, string, int);
void estacionar(Pilha *, Carro);
Carro sair(Pilha *);
void imprime_pilha(Pilha *);
void imprime_tudo(Pilha *);
int quantidade_vagas(Pilha *);


int main() {
    Pilha estacionamento;
    inicializar(&estacionamento);
    Carro carro_comum;

    estacionar(&estacionamento,"ABC1234", 1999);
    carro_comum.placa = "DOW5782";
    carro_comum.ano = 2004;
    estacionar(&estacionamento, carro_comum);
    cout << "Quantidade de vagas "  << quantidade_vagas(&estacionamento) << endl <<"PILHA DE CARROS \n";
    imprime_pilha(&estacionamento);
    cout << "PILHA DE CARROS \n";
    estacionar(&estacionamento,"XYZ3215", 2022);
    estacionar(&estacionamento,"WQT2245", 2020);
    estacionar(&estacionamento,"GIN3285", 2017);
    estacionar(&estacionamento,"HIX5215", 2008);
    imprime_pilha(&estacionamento);

    carro_comum = sair(&estacionamento);
    cout << "Saiu o carro: " << carro_comum.placa << endl;
    cout << "PILHA DE CARROS \n";
    imprime_pilha(&estacionamento);
    cout << "Quantidade de vagas " << quantidade_vagas(&estacionamento) << endl;
    cout << "TODA PILHA" <<endl;
    imprime_tudo(&estacionamento);

}

/* Desenvolver as funções propostas a partir daqui */
void inicializar(Pilha *estacionamento) {
    estacionamento->contador = 0;
    int x;
	for (x = TAMANHO_PILHA-1; x >= 0 ; x--){
		estacionamento->data[x].placa = "AAA0000" ;
        estacionamento->data[x].ano = 0 ;
    }
}

void estacionar(Pilha *estacionamento, string placa, int ano) {     
        Carro novoCarro;
        novoCarro.placa = placa;
        novoCarro.ano = ano;
        estacionar(estacionamento, novoCarro);
        //estacionamento->data[estacionamento->contador] = novoCarro; // Empilhar o carro
        //estacionamento->contador++; // Incrementar o contador    
    
}

void estacionar (Pilha *estacionamento, Carro novoCarro){
    if (estacionamento -> contador <TAMANHO_PILHA){
        estacionamento->data[estacionamento->contador] = novoCarro;
        estacionamento->contador++;

    }else {
        cout << "O estacionamento está lotado." << endl;
    }
}

Carro sair(Pilha *estacionamento){    
    Carro saidaCarro;
    estacionamento->contador--;  
    saidaCarro = estacionamento->data[estacionamento->contador];
    estacionamento->data[estacionamento->contador].placa = "XXX0000" ;
    estacionamento->data[estacionamento-> contador].ano = 0 ;
    return saidaCarro;
}

void imprime_pilha(Pilha *estacionamento){ 
    cout << "placa    " << "  Ano"<< endl;
    for (int i = TAMANHO_PILHA -1; i >= 0; i--)    
    {
        if(estacionamento -> data[i].placa ==  "AAA0000" || "XXX0000" &&
         estacionamento -> data[i].ano == 0){
         }else{ 
        cout <<estacionamento -> data[i].placa << " -- " ;
        cout << estacionamento -> data[i].ano << endl;}
    }      
}
// IMPRIME TUDO PERGUNTA 6.1
void imprime_tudo(Pilha *estacionamento){
    cout <<"placa    " << "  Ano" <<endl;
    for (int i = TAMANHO_PILHA -1; i >= 0; i--)
    {
        cout << estacionamento -> data[i].placa << " -- ";
        cout << estacionamento -> data[i].ano << endl;
    }
}

// QUESTAO 6.2

int quantidade_vagas(Pilha *estacionamento){
    // quantidade_vagas_geral - quantidade_vagas_ocupadas.
    int vagas;
    vagas = TAMANHO_PILHA - estacionamento -> contador;
    return vagas;
}
