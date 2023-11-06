#include<iostream>
#include<ctime>

using namespace std;
struct URL {
    string URL;
    int dia;
    int mes;
    int ano;
};

struct Node {
    URL url;
    Node *next;
};

struct Pilha {
    Node *topo;
    int tamanho;
};

void inicializar(Pilha *historico);
void navegar(Pilha *historico, string url_acessada);
void navegar(Pilha *historico, string, int dia, int mes, int ano);
URL voltar(Pilha *historico);
void imprime_historico(Pilha *historico);
void imprime_url(URL);
void destruir_historico(Pilha *historico);


int main() {
    URL site;
    Pilha historico_navegacao;
    inicializar(&historico_navegacao);
    navegar(&historico_navegacao, "http://www.google.com");

    navegar(&historico_navegacao, "http://www.facebook.com");
    navegar(&historico_navegacao, "http://www.globo.com");
    navegar(&historico_navegacao, "http://www.fatecararas.sp.gov.br");
    navegar(&historico_navegacao, "http://www.google.com");
    navegar(&historico_navegacao, "http://www.facebook.com");
    navegar(&historico_navegacao, "http://www.fatecararas.sp.gov.br");
    navegar(&historico_navegacao, "http://www.gmail.com");

    imprime_historico(&historico_navegacao);
    
    site = voltar(&historico_navegacao);
    imprime_url(site);
    site = voltar(&historico_navegacao);
    imprime_url(site);
    imprime_url(voltar(&historico_navegacao));

    imprime_historico(&historico_navegacao);
    destruir_historico(&historico_navegacao);

    return 0;
}

void inicializar(Pilha* historico) {
    historico->tamanho = 0;
    historico->topo = NULL;
}

void navegar(Pilha *historico, string url_acessada) {    
    std::time_t t = std::time(0);
    std::tm* now = std::localtime(&t);
    int dia = now->tm_mday;
    int mes = now->tm_mon + 1;
    int ano = now->tm_year + 1900;   
    navegar(historico, url_acessada, dia, mes, ano);
}

void navegar(Pilha *historico, string url_acessada ,int dia, int mes, int ano){
    Node* np = new Node;
    if (np == NULL) {
        cerr << "A memória acabou." << endl;
        exit(1);
    }
    np->url.URL = url_acessada;
    np->url.dia = dia;
    np->url.mes = mes;
    np->url.ano = ano;
    np->next = historico->topo;
    historico->topo = np;
    historico->tamanho++;
}

URL voltar(Pilha* historico) {
    if (historico->tamanho == 0) {
         cerr << "Historico vazio." << endl   ;
        exit(1);
    }
    
    Node* np = historico->topo;
    historico->topo = np->next;
    URL url = np->url;
    cout << "     " << url.dia << "/" << url.mes << "/" << url.ano << "    ";
    delete np;
    historico->tamanho--;
    return url;
}

void imprime_url(URL url) {
    cout << url.URL << endl;
}

void imprime_historico(Pilha* historico) {
    cout << "\n\n";
    cout << "Quantidade de URLs: " << historico->tamanho << " no historico." << endl;
    cout << "======================================\n";
    Node* np = historico->topo;
    while (np != NULL) {
        imprime_url(np->url);
        np = np->next;
    }
    cout << "------------------------\n";
}

void destruir_historico(Pilha* historico) { 
    while (historico->topo != NULL) {
        Node* np = historico->topo;  
        historico->topo = np->next;
        cout << "Desempilhado a URL: ";
        imprime_url (np->url); 
        delete np;
    }
    historico->tamanho = 0;
}