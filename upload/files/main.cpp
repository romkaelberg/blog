#include <bits/stdc++.h>

using namespace std;
long long n,arr[100],temp1 = 1;


main(void){

    ios_base::sync_with_stdio(0);

    cin >> n;

    for(int i = 1;i <= n;i++){

        temp1 +=1/(i*i);

    }
    cout << temp1;
}
