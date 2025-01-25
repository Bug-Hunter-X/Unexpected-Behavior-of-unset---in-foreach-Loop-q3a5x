# PHP foreach and unset() Bug

This repository demonstrates an uncommon bug in PHP related to the interaction between the `foreach` loop and the `unset()` function. When using `unset()` within a `foreach` loop to remove elements from the array being iterated, the loop's internal pointer might skip elements, leading to unexpected results.

The `bug.php` file contains the problematic code. The `bugSolution.php` file provides a corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `php bug.php`.
3. Observe the unexpected output.
4. Run `php bugSolution.php`.
5. Observe the corrected output.