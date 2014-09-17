/**
* mario.c
*
* Prints half pyramid.
*
*/

#include <cs50.h>
#include <stdio.h>

/**
*
* This function is used to check the user input is within the range.
*
*/
int CheckInput(int input_number)
{
    if(input_number >=0 && input_number <=23)
        return 0;
    else
        return 1;
}

/**
*
* Main function of this program.
*
*/
int main()
{
    int input;
    int spaces = 0,pounds = 0;
    int space_counter = 0, pound_counter = 0;
    do
    {
        // Get the user input
        printf("Height: ");
        input = GetInt();
        
        // Validate the user input
        if(CheckInput(input) == 1)
            continue;
    }while(input < 0 || input > 23);
    // Initial values for paces and pounds    
    spaces = input-1;
    pounds = 2;
    
    // Lets Start
    while(input>0)
    {
        for (space_counter=spaces;space_counter>0;space_counter--)
        {
            printf(" ");
        }
        spaces--;
        
        for (pound_counter=0;pound_counter<pounds;pound_counter++)
        {
            printf("#");   
        }
        pounds++;
        
        printf("\n");
        input--;
    }

    // Good Bye
    return 0;
}

