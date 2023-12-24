#include <iostream>

using namespace std;

int fun(int x){return x+=5;}
int fun2(int *x){return *x+=5;}

int fun3(int &x){return x+=5;}


int main()
{

int x=2;
//int y=2;
//new test
int z=2;
cout<<fun(x)<<"=>"<<x<<endl;
cout<<fun2(&y)<<"=>"<<y<<endl;
cout<<fun3(z)<<"=>"<<z<<endl;



}
