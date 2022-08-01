#include <stdio.h>



int main(void) {
    int a[6];
    int i = 0;

    // csvファイル オープン
    FILE* fp;
    fopen_s(&fp,"data.csv", "rt");
    if (fp == NULL) {
        printf("ファイルオープン失敗");
        return 1;
    }
    
    // CSV読み込み
    fscanf_s(fp, "%d,%d,%d,%d,%d", &a[0], &a[1], &a[2], &a[3], &a[4] );
    printf("%d,%d,%d,%d,%d", a[0], a[1], a[2], a[3], a[4]);

    
    


    fclose(fp);

    

    return 0;
}