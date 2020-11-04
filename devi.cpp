#include <iostream>
#include <cmath>
using namespace std;



int main()
{
	int n,j,y;
	double sum=0,varian;
	cout<<"\n Masukkan Jumlah Data : ";
	cin>>y;
	double max[y];

	for(n=0;n<=y-1;n++)
	{
		
		cout<<"\n data : ";
		cin>>max[n];
	}
	n=0;
	cout<<endl;
	cout<<"hasil input :";
	for(j=0;j<=y-1;j++)
	{
		cout<<max[n]<<" ";
		sum+=max[n];
		n++;
	}
	double mean=sum/n;
	cout<<endl<<"SUM :"<<sum<<endl;
	cout<<"MEAN :"<<mean<<endl;
	n=0;
	j=0;
	sum=0;
	for(j=0;j<=y-1;j++)
	{
		max[n]=pow((max[n]-mean),2);
		sum+=max[n];
		n++;
	}
	varian=sum/(n-1);
	cout<<"Varian :"<<varian<<endl;
	cout<<"Deviansi:"<<sqrt(varian)<<"\n\n";
	return 0;
	}
