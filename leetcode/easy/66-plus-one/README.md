# 66. Plus One

## Problem Description

Given a large integer represented as an integer array `digits`, where each `digits[i]` is the ith digit of the integer, increment the large integer by one and return the resulting array.

The digits are stored such that the most significant digit is at the head of the list, and each element in the array contains a single digit.

You may assume the integer does not contain any leading zero, except the number 0 itself.

## Examples

**Example 1:**
- Input: `digits = [1,2,3]`
- Output: `[1,2,4]`
- Explanation: The array represents the integer 123, incrementing by one gives 124.

**Example 2:**
- Input: `digits = [4,3,2,1]`
- Output: `[4,3,2,2]`
- Explanation: The array represents the integer 4321, incrementing by one gives 4322.

**Example 3:**
- Input: `digits = [9]`
- Output: `[1,0]`
- Explanation: The array represents the integer 9, incrementing by one gives 10.

## Algorithm Explanation

The solution uses a **carry propagation** approach, similar to how we perform addition by hand:

1. **Initialize carry**: Start with a carry of 1 (since we're adding 1 to the number)

2. **Process from right to left**: Iterate through the digits array from the least significant digit (rightmost) to the most significant digit (leftmost)

3. **For each digit**:
    - Add the current digit with the carry
    - Update the current digit to `sum % 10` (the remainder when divided by 10)
    - Update the carry to `sum / 10` (the quotient when divided by 10)
    - If carry becomes 0, we can break early as no more propagation is needed

4. **Handle final carry**: If there's still a carry after processing all digits, it means we need an additional digit at the front (e.g., 999 + 1 = 1000)

## Example Walkthrough

Let's trace through different scenarios to understand how the algorithm works:

### Example 1: Simple Case - `[1,2,3]`

**Initial state:**
- `digits = [1,2,3]`
- `carry = 1`

**Iteration 1 (i=2, digit=3):**
- `sum = 3 + 1 = 4`
- `digits[2] = 4 % 10 = 4`
- `carry = 4 / 10 = 0`
- Since `carry = 0`, we break early

**Result:** `[1,2,4]`

### Example 2: Carry Propagation - `[1,2,9]`

**Initial state:**
- `digits = [1,2,9]`
- `carry = 1`

**Iteration 1 (i=2, digit=9):**
- `sum = 9 + 1 = 10`
- `digits[2] = 10 % 10 = 0`
- `carry = 10 / 10 = 1`
- Continue since `carry = 1`

**Iteration 2 (i=1, digit=2):**
- `sum = 2 + 1 = 3`
- `digits[1] = 3 % 10 = 3`
- `carry = 3 / 10 = 0`
- Since `carry = 0`, we break early

**Result:** `[1,3,0]`

### Example 3: All 9s - `[9,9,9]`

**Initial state:**
- `digits = [9,9,9]`
- `carry = 1`

**Iteration 1 (i=2, digit=9):**
- `sum = 9 + 1 = 10`
- `digits[2] = 10 % 10 = 0`
- `carry = 10 / 10 = 1`
- Continue since `carry = 1`

**Iteration 2 (i=1, digit=9):**
- `sum = 9 + 1 = 10`
- `digits[1] = 10 % 10 = 0`
- `carry = 10 / 10 = 1`
- Continue since `carry = 1`

**Iteration 3 (i=0, digit=9):**
- `sum = 9 + 1 = 10`
- `digits[0] = 10 % 10 = 0`
- `carry = 10 / 10 = 1`
- Loop ends, but `carry = 1`

**After loop:**
- Since `carry > 0`, we prepend it to the array
- `digits = [1,0,0,0]`

**Result:** `[1,0,0,0]`

## Key Insights

- **Edge Case Handling**: The algorithm naturally handles cases where all digits are 9 (e.g., [9,9,9] becomes [1,0,0,0])
- **Early Termination**: When carry becomes 0, we can stop processing since no further changes are needed
- **In-place Modification**: The algorithm modifies the input array directly, only creating a new array when an additional digit is needed

## Complexity Analysis

- **Time Complexity**: O(n) where n is the number of digits
    - In the worst case, we might need to process all digits
    - In the best case (no carry propagation), we only process one digit

- **Space Complexity**: O(1) or O(n)
    - O(1) if no additional digit is needed
    - O(n) if we need to create a new array with an additional digit (like 999 → 1000)

## Implementation Notes

The solution handles the carry propagation elegantly by:
- Using modulo operation to get the digit value
- Using integer division to get the carry for the next position
- Only adding a new digit when absolutely necessary

This approach is efficient and works for numbers of any length, making it suitable for very large integers that cannot be represented by standard integer types.