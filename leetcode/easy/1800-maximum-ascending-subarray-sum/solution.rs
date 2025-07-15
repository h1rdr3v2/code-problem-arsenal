use std::cmp::max;

impl Solution {
    pub fn max_ascending_sum(nums: Vec<i32>) -> i32 {
        let mut max_sum = nums[0];
        let mut current_sum = nums[0];
        for i in 1..nums.len() {
            if nums[i] > nums[i - 1] {
                current_sum += nums[i];
            } else {
                max_sum = max(max_sum, current_sum);
                current_sum = nums[i];
            }
        }
        max(max_sum, current_sum)
    }
}
