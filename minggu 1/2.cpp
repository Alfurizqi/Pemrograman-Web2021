#include<iostream>
using namespace std;

int main(){
	string m,r;
	int n;
	
	cout<<"Hallo, Boleh kenalan gak sih? "<<endl;
	cin>> n ;
	cout<<endl;
	
	if (n==1){
		cout<<"Alhamdulillah,namanya siapa? ";
		cin>>m;
		cout<< m <<" salam kenal ya hehe...";
		cout<<endl;
		
		cout<<"Eh btw, rumahnya mana? ";
		cin>>r;cout<<endl;
		cout<<"oalah rumahnya " <<r <<" to"<<endl;
		
		
		cin.get();
	}
	
	else{
		cout<<"yah gak boleh :(";
	}
//	do
//	cout<<""
	cin.get();
	
	return 0;
}
