#include<bits/stdc++.h>
using namespace std;
int main()
{
	int n,t;
	cin>>t;
	while(t!=0)
	{
	cin>>n;
	int ar[n][2];
	for(int i=0;i<n;i++)
	{
		cin>>ar[i][0];
		ar[i][1]=1;
	}
	for(int i=1;i<n;i++)
	{
		for(int j=0;j<i;j++)
		{
			if(ar[j][0] < ar[i][0])
				ar[i][1]=max(ar[i][1],ar[j][1]+1);
		}
	}
		for(int i=0;i<n;i++)
		cout<<ar[i][1]<<endl;
		t--;
	}
}