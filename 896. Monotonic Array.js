/**
 * @param {number[]} nums
 * @return {boolean}
 */
var isMonotonic = function (nums) {
  if (nums.length === 0) {
    return true;
  }

  const first = nums[0];
  const last = nums[nums.length - 1];

  if (first === last) {
    for (let i = 0; i < nums.length - 1; i++) {
      if (nums[i + 1] !== nums[i]) return false;
    }
  } else if (first < last) {
    for (let i = 0; i < nums.length - 1; i++) {
      if (nums[i + 1] < nums[i]) return false;
    }
  } else {
    for (let i = 0; i < nums.length - 1; i++) {
      if (nums[i + 1] > nums[i]) return false;
    }
  }

  return true;
};
