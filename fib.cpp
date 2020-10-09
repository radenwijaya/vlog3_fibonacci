#include <iostream>	
#include <sys/time.h>

using namespace std;

int fib(int x)
{
	return (x<=1) ? 1 : fib(x-1)+fib(x-2);
}

int main()
{
	timeval start_timer;
	timeval end_timer;
	gettimeofday(&start_timer, NULL);

	cout << fib(42) << "\n";

	gettimeofday(&end_timer, NULL);

//	cout << (end_timer.tv_usec - start_timer.tv_usec) << "\n";
	return 0;
}
