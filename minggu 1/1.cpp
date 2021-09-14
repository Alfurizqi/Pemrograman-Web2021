#include<iostream>
#include<string.h>
#include<stdio.h>
#include <cmath>
using namespace std;

int main(){
	int p1,p2,l1,l2,Lkamar,Lkramik,kperdus,biaya,hargak;
	float jkramik,dus;
	
	cout<<"\tMenentukan jumlah dan biaya kramik untuk kamar"<<endl;
	cout<<"\t============================================="<<endl;
	cout<<endl;
	
	cout<<"Panjang kamar : ";cin>>p1;
	cout<<"Lebar kamar : ";cin>>l1;
	Lkamar=p1*l1;
	cout<<"Luas kamar : "<<Lkamar<<endl;
	cout<<endl;
	
	cout<<"Panjang kramik : ";cin>>p2;
	cout<<"Lebar kramik : ";cin>>l2;
	Lkramik=p2*l2;
	cout<<"Luas kramik : "<<Lkramik<<endl;
	
	jkramik=Lkamar/Lkramik;
	cout<<"Jumlah kramik yang diperlukan : "<<jkramik<<endl;
	cout<<endl;
	
	cout<<"Kramik per dus : ",cin>>kperdus;
	dus=jkramik/kperdus;
	cout<<"Kebutuhan kramik : "<<dus <<" dus" <<endl;
	cout<<"Dibulatkan kebutuhan kramik : "<<ceil(dus) <<" dus" <<endl;
	cout<<endl;
	
	cout<<"harga kramik : ";cin>>hargak;
	biaya=ceil(dus)*hargak;
	cout<<"biaya yang dibutuhkan : "<<biaya;
	cout<<endl;
	cin.get();
	
	return 0;
}
