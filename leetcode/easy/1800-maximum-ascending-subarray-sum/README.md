# LeetCode 1800 - Maximum Ascending Subarray Sum

## Problem Description

Given an array of positive integers `nums`, return the maximum possible sum of an ascending subarray in `nums`.

A subarray is defined as a contiguous sequence of numbers in an array. A subarray `[nums[l], nums[l+1], ..., nums[r-1], nums[r]]` is ascending if for all `i` where `l <= i < r`: `nums[i] < nums[i+1]`.

## Algorithm Explanation

Both implementations use the same **single-pass greedy algorithm** with the following approach:

### Core Logic:
1. **Initialize**: Start with the first element as both the current sum and maximum sum
2. **Iterate**: For each subsequent element:
    - If current element > previous element: Add to current ascending subarray sum
    - If current element ≤ previous element:
        - Update maximum sum if current sum is larger
        - Reset current sum to start a new subarray from current element
3. **Finalize**: Return the maximum between the tracked maximum and final current sum

### Time Complexity: O(n)
- Single pass through the array

### Space Complexity: O(1)
- Only using constant extra space for variables

## Implementation Details

### Key Variables:
- `maxSum` / `max_sum`: Tracks the maximum sum found so far
- `currentSum` / `current_sum`: Tracks the sum of the current ascending subarray

### Algorithm Steps:
```
1. maxSum = currentSum = nums[0]
2. For i = 1 to n-1:
   - If nums[i] > nums[i-1]: currentSum += nums[i]  // Extend current subarray
   - Else: 
     - maxSum = max(maxSum, currentSum)              // Update maximum
     - currentSum = nums[i]                          // Start new subarray
3. Return max(maxSum, currentSum)                    // Handle final subarray
```

## Example Walkthrough

Input: `[10, 20, 30, 5, 10, 50]`

| Step | Element | Comparison | Current Sum | Max Sum | Action |
|------|---------|------------|-------------|---------|--------|
| 1    | 10      | -          | 10          | 10      | Initialize |
| 2    | 20      | 20 > 10    | 30          | 10      | Extend subarray |
| 3    | 30      | 30 > 20    | 60          | 10      | Extend subarray |
| 4    | 5       | 5 < 30     | 5           | 60      | New subarray starts |
| 5    | 10      | 10 > 5     | 15          | 60      | Extend subarray |
| 6    | 50      | 50 > 10    | 65          | 60      | Extend subarray |

Final: `max(60, 65) = 65`

## Language-Specific Notes

### PHP Implementation:
- Uses `count($nums)` for array length
- Uses `max()` built-in function for comparison

### Rust Implementation:
- Uses `nums.len()` for vector length
- Uses `std::cmp::max` for comparison
- Implements as associated function in `impl Solution` block

Both implementations follow identical logic and produce the same results with equivalent performance characteristics.