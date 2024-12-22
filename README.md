# PHP: Unexpected Behavior in Array Summation Function

This repository demonstrates a common error in PHP functions that handle numerical arrays:  silent failure when encountering non-numeric values. The `myFunc` function attempts to sum an array of numbers but lacks robust error handling for non-numeric inputs, leading to an unexpected -1 result instead of a more informative error or exception.