#include <bits/stdc++.h>
using namespace std;
class may
{
    char mamay[20];
    char kieumay[20];
    char tinhtrang[20];

public:
    void nhap();
    void xuat();
};
class quanly
{
    char maql[20];
    char tenql[20];

public:
    void nhap();
    void xuat();
};
class phongmay
{
    char maphong[20];
    char tenphong[20];
    quanly x;
    may *y;
    int n;

public:
    void nhap();
    void xuat();
};
void may::nhap()
{
    cout << "Ma may: ";
    fflush(stdin);
    gets(mamay);
    cout << "Kieu may: ";
    fflush(stdin);
    gets(kieumay);
    cout << "Tinh trang: ";
    fflush(stdin);
    gets(tinhtrang);
}
void may::xuat()
{
    cout << setw(15) << mamay << setw(15) << kieumay << setw(15) << tinhtrang << endl;
}
void quanly::nhap()
{
    cout << "Nhap ma quan ly: ";
    fflush(stdin);
    gets(maql);
    cout << "Nhap ten quan ly: ";
    fflush(stdin);
    gets(tenql);
}
void phongmay::nhap()
{
    cout << "ma phong: " << fflush(stdin);
    gets(maphong);
    cout << "ten phong: " << fflush(stdin);
    gets(tenphong);
    x.nhap();
    cout << "Nhap so may: ";
    cin >> n;
    y = new may[n];
    for (int i = 0; i < n; i++)
    {
        y[i].nhap();
    }
}
void phongmay::xuat()
{
    cout << "ma phong: " << maphong;
    cout<< "Ten phong: "<<tenphong<<endl;
    x.xuat();
    cout<<setw(15)<<"Ma may"<<setw(15) <<"Kieu may"<<setw(15) <<"Tinh trang"<<endl;
    for(int i=0;i<n;i++) {
        y[i].xuat();
    }
}
int main() {
    phongmay a;
    a.nhap();
    a.xuat();
    return 0;
}