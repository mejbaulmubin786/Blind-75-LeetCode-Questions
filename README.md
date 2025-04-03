# Blind 75 LeetCode Questions
## Array
- Two Sum(1)✔️
- Best Time to Buy and Sell Stock(121)✔️
- Contains Duplicate(217)✔️
- Product of Array Except Self(238)✔️
- Maximum Subarray(53) ✔️
- Maximum Product Subarray(152)✔️
- Find Minimum in Rotated Sorted Array(153)✔️
- Search in Rotated Sorted Array(33)✔️
- 3Sum(15)✔️
- Container With Most Water(11)
## Binary
- Sum of Two Integers(371)
- Number of 1 Bits(191)
- Counting Bits(338)
- Missing Number(268)
- Reverse Bits(190)
## Dynamic Programming
- Climbing Stairs✔️
- Coin Change
- Longest Increasing Subsequence
- Longest Common Subsequence
- Word Break Problem
- Combination Sum
- House Robber
- House Robber II
- Decode Ways (91)
- Unique Paths
- Jump Game (55)✔️
# Graph
- Clone Graph
- Course Schedule
- Pacific Atlantic Water Flow
- Number of Islands
- Longest Consecutive Sequence
- Alien Dictionary (Leetcode Premium)
- Graph Valid Tree (Leetcode Premium)
- Number of Connected Components in an Undirected Graph (Leetcode Premium)
## Interval
- Insert Interval
- Merge Intervals
- Non-overlapping Intervals
- Meeting Rooms (Leetcode Premium)
- Meeting Rooms II (Leetcode Premium)
## Linked List
- Reverse a Linked List
- Detect Cycle in a Linked List
- Merge Two Sorted Lists
- Merge K Sorted Lists
- Remove Nth Node From End Of List
- Reorder List
## Matrix
- Set Matrix Zeroes
- Spiral Matrix
- Rotate Image
- Word Search
## String
- Longest Substring Without Repeating Characters
- Longest Repeating Character Replacement
- Minimum Window Substring
- Valid Anagram
- Group Anagrams
- Valid Parentheses
- Valid Palindrome
- Longest Palindromic Substring
- Palindromic Substrings
- Encode and Decode Strings (Leetcode Premium)
## Tree
- Maximum Depth of Binary Tree
- Same Tree
- Invert/Flip Binary Tree
- Binary Tree Maximum Path Sum
- Binary Tree Level Order Traversal
- Serialize and Deserialize Binary Tree
- Subtree of Another Tree
- Construct Binary Tree from Preorder and Inorder Traversal
- Validate Binary Search Tree
- Kth Smallest Element in a BST
- Lowest Common Ancestor of BST
- Implement Trie (Prefix Tree)
- Add and Search Word
- Word Search II
## Heap
- Merge K Sorted Lists
- Top K Frequent Elements
- Find Median from Data Stream

Composer হলো একটি ডিপেন্ডেন্সি ম্যানেজার যা PHP প্রজেক্টে লাইব্রেরি এবং প্যাকেজ ম্যানেজ করতে ব্যবহৃত হয়। এটি মূলত আপনার প্রজেক্টের জন্য দরকারি সব লাইব্রেরি সহজে ইনস্টল, আপডেট এবং অটোলোড করতে সাহায্য করে। Composer পিএইচপি প্রজেক্টগুলির জন্য ম্যানেজার হিসেবে কাজ করে, যেখানে এটি প্রয়োজনীয় প্যাকেজগুলো খুঁজে বের করে এবং সেগুলোকে নির্দিষ্ট ভার্সনে ডাউনলোড ও সেটআপ করে দেয়। 

### Composer-এর কার্যকারিতা
1. **ডিপেন্ডেন্সি ম্যানেজমেন্ট**: Composer এর প্রধান কাজ হলো প্রজেক্টের জন্য প্রয়োজনীয় প্যাকেজগুলো ম্যানেজ করা। এটি আপনার `composer.json` ফাইল অনুযায়ী প্রয়োজনীয় প্যাকেজগুলো ডাউনলোড করে এবং ইনস্টল করে।

2. **অটোলোডিং**: Composer আপনার প্রজেক্টে থাকা বিভিন্ন ক্লাস এবং প্যাকেজগুলোকে অটোম্যাটিকালি লোড করতে পারে। এর ফলে, আপনাকে আলাদা করে `require` বা `include` করতে হয় না।

3. **ভার্সন কন্ট্রোল**: Composer আপনাকে বিভিন্ন প্যাকেজের নির্দিষ্ট ভার্সন ব্যবহার করার সুযোগ দেয়। এটি নিশ্চিত করে যে, আপনার প্রজেক্ট একই ভার্সনের প্যাকেজ ব্যবহার করছে এবং সিস্টেমে কোন ইস্যু তৈরি করছে না।

4. **আপডেটিং**: Composer এর মাধ্যমে আপনি সহজেই আপনার প্রজেক্টের প্যাকেজগুলো আপডেট করতে পারেন। শুধু `composer update` কমান্ড দিলে Composer আপনার প্রজেক্টের সব প্যাকেজকে আপডেট করে দেবে।

5. **প্যাকেজ রেজিস্ট্রি**: Packagist হলো Composer এর জন্য প্রধান প্যাকেজ রেজিস্ট্রি, যেখানে লাখ লাখ প্যাকেজ রয়েছে যা আপনি আপনার প্রজেক্টে ব্যবহার করতে পারেন।

### Composer এর প্রাথমিক ব্যবহার
1. **ইনস্টলেশন**: Composer ইনস্টল করার জন্য আপনাকে প্রথমে Composer এর অফিসিয়াল ওয়েবসাইট থেকে এটি ডাউনলোড করতে হবে এবং আপনার সিস্টেমে ইনস্টল করতে হবে। 

2. **composer.json ফাইল তৈরি**: এই ফাইলের মাধ্যমে আপনি আপনার প্রজেক্টের জন্য প্রয়োজনীয় প্যাকেজগুলো নির্দিষ্ট করতে পারেন। যেমন:

   ```json
   {
       "require": {
           "monolog/monolog": "2.0.*"
       }
   }
   ```

3. **প্যাকেজ ইনস্টলেশন**: `composer install` কমান্ডটি চালিয়ে আপনি আপনার প্রজেক্টের জন্য প্রয়োজনীয় প্যাকেজগুলো ইনস্টল করতে পারবেন।

4. **অটোলোডিং**: Composer এর মাধ্যমে অটোলোডিং সেটআপ করতে `require 'vendor/autoload.php';` আপনার প্রজেক্টের ইনডেক্স ফাইলে যোগ করতে হবে।

### Composer এর সুবিধা
- একাধিক প্রজেক্টে একই প্যাকেজ ব্যবহারে সামঞ্জস্যতা রক্ষা করা
- লাইব্রেরি এবং ফ্রেমওয়ার্ক আপডেট করা সহজ
- নির্দিষ্ট প্যাকেজের নির্ভরশীলতা ম্যানেজ করা

Composer PHP ডেভেলপমেন্টের জন্য অত্যন্ত গুরুত্বপূর্ণ একটি টুল, যা আপনার প্রজেক্টের কোড মানেজমেন্ট এবং ভার্সন কন্ট্রোলকে সহজ ও কার্যকর করে তোলে।






Laravel হল একটি জনপ্রিয় PHP ফ্রেমওয়ার্ক যা ওয়েব অ্যাপ্লিকেশন ডেভেলপমেন্টকে সহজ, দ্রুত, এবং কার্যকর করে তোলে। Composer Laravel এর জন্য অত্যন্ত গুরুত্বপূর্ণ একটি টুল, কারণ Laravel এর অধিকাংশ ফিচার এবং প্যাকেজ ম্যানেজমেন্ট Composer এর মাধ্যমে করা হয়।

### Laravel-এ Composer-এর ভূমিকা

1. **Laravel ইনস্টলেশন**: Laravel নিজেই Composer এর মাধ্যমে ইনস্টল করা হয়। আপনি `composer create-project --prefer-dist laravel/laravel project-name` কমান্ডটি ব্যবহার করে Laravel এর একটি নতুন প্রজেক্ট তৈরি করতে পারেন।

2. **ডিপেন্ডেন্সি ম্যানেজমেন্ট**: Laravel এর বিভিন্ন ফিচার এবং প্যাকেজগুলি Composer এর মাধ্যমে ম্যানেজ করা হয়। Laravel এর প্রধান প্যাকেজগুলো যেমন Illuminate (Laravel এর বিভিন্ন মডিউল), Carbon (তারিখ ও সময় ব্যবস্থাপনা), এবং অন্যান্য থার্ড-পার্টি লাইব্রেরিগুলো Composer এর মাধ্যমে ইনস্টল এবং ম্যানেজ করা হয়।

3. **প্যাকেজ ইনস্টলেশন**: Laravel এ আপনি সহজেই Composer ব্যবহার করে বিভিন্ন প্যাকেজ ইনস্টল করতে পারেন। যেমন, `composer require spatie/laravel-permission` এই কমান্ডটি একটি স্পেসিফিক প্যাকেজ ইনস্টল করতে ব্যবহৃত হয়।

4. **অটোলোডিং**: Laravel এর অটোম্যাটিক ক্লাস লোডিং (PSR-4 অটোলোডিং স্ট্যান্ডার্ড) Composer এর মাধ্যমে সম্পন্ন হয়। এর মাধ্যমে আপনি Laravel এর বিভিন্ন ক্লাস এবং মডেল অটোম্যাটিকালি লোড করতে পারেন, যা কোড লেখার সময় `require` বা `include` ব্যবহারের প্রয়োজন নেই।

5. **Laravel এর কোডবেজ আপডেট**: আপনি যখন Laravel এর নতুন ভার্সনে আপডেট করতে চান, তখন `composer update` কমান্ডটি ব্যবহার করা হয়। এটি Laravel এর মূল এবং নির্ভরশীল প্যাকেজগুলোকে আপডেট করে।

6. **প্যাকেজ কনফিগারেশন ও প্যাকেজ ডেভেলপমেন্ট**: Laravel প্যাকেজ ডেভেলপমেন্টেও Composer এর গুরুত্বপূর্ণ ভূমিকা রয়েছে। আপনি Composer ব্যবহার করে নতুন প্যাকেজ তৈরি, পাবলিশ, এবং তা অন্যান্য Laravel প্রজেক্টে ব্যবহার করতে পারেন।

7. **বহিরাগত লাইব্রেরি ব্যবহারে সুবিধা**: Laravel এর প্রজেক্টে বিভিন্ন বহিরাগত লাইব্রেরি যুক্ত করার জন্য Composer ব্যবহৃত হয়। এটি বিভিন্ন API, প্লাগিন, এবং থার্ড-পার্টি সার্ভিস ইন্টিগ্রেশন সহজ করে তোলে।

Composer Laravel ডেভেলপমেন্টে খুবই গুরুত্বপূর্ণ একটি টুল, যা Laravel এর ক্ষমতা ও সুবিধাকে আরও বৃদ্ধি করে। Laravel এর সুবিধা নিতে হলে Composer এর কার্যকারিতা এবং ব্যবহারের উপর ভালো দক্ষতা অর্জন করা জরুরি।
























Laravel 10 একটি জনপ্রিয় PHP ফ্রেমওয়ার্ক, এবং এর ফোল্ডার স্ট্রাকচারটি খুবই ভালোভাবে সংগঠিত। এই ফোল্ডার স্ট্রাকচারটি Laravel-এ কাজ করা ডেভেলপারদের জন্য কোড লিখতে এবং পরিচালনা করতে সহায়ক হয়। নিচে Laravel 10-এর ফোল্ডার স্ট্রাকচারের একটি বিশদ আলোচনা করা হলো:

### 1. **`app/`**
   - **`Console/`**: এখানে কাস্টম Artisan কমান্ডগুলো থাকে। Laravel এর কমান্ড লাইন ইন্টারফেস (CLI) দ্বারা এই কমান্ডগুলো ব্যবহৃত হয়।
   - **`Exceptions/`**: এখানে অ্যাপ্লিকেশনের সব Exception handling ক্লাস থাকে। `Handler.php` ফাইলটি সাধারণত এখানে থাকে, যা বিভিন্ন ধরনের এক্সেপশন হ্যান্ডেল করতে ব্যবহৃত হয়।
   - **`Http/`**: এই ফোল্ডারটিতে কন্ট্রোলার, মিডলওয়্যার, এবং রিকোয়েস্ট ক্লাসগুলো থাকে। 
     - **`Controllers/`**: সব কন্ট্রোলার ফাইল এখানে থাকে। MVC আর্কিটেকচারের "Controller" অংশটি এখানে থাকে।
     - **`Middleware/`**: এই ফোল্ডারে মিডলওয়্যার ক্লাসগুলো থাকে, যা HTTP রিকোয়েস্ট এবং রেসপন্সের মাঝে বিভিন্ন ধরনের ফিল্টারিং বা চেক করতে ব্যবহৃত হয়।
     - **`Requests/`**: ফর্ম রিকোয়েস্ট ভ্যালিডেশনের জন্য কাস্টম রিকোয়েস্ট ক্লাসগুলো এখানে থাকে।
   - **`Models/`**: Laravel 8 থেকে মডেলগুলো সাধারণত এখানে রাখা হয়। যদিও আপনি মডেলগুলো সরাসরি `app/` ফোল্ডারেও রাখতে পারেন।
   - **`Providers/`**: সার্ভিস প্রোভাইডারগুলো এখানে থাকে। সার্ভিস প্রোভাইডার Laravel এর IOC কন্টেইনারে বিভিন্ন সার্ভিস রেজিস্টার করে।

### 2. **`bootstrap/`**
   - **`app.php`**: এই ফাইলটি অ্যাপ্লিকেশন বুটস্ট্র্যাপিংয়ের কাজ করে, যেখানে Laravel ফ্রেমওয়ার্ক লোড হয় এবং স্টার্ট হয়।
   - **`cache/`**: এখানে ফ্রেমওয়ার্কের জেনারেটেড ফাইলগুলো (যেমন রুট, কনফিগ, সার্ভিসেসের ক্যাশ) থাকে, যা অ্যাপ্লিকেশনের পারফরম্যান্স বৃদ্ধি করে।

### 3. **`config/`**
   - এখানে অ্যাপ্লিকেশনের সমস্ত কনফিগারেশন ফাইল থাকে। উদাহরণস্বরূপ, `app.php`, `database.php`, `mail.php` ইত্যাদি। এখানে বিভিন্ন সেটিংস কনফিগার করা হয়।

### 4. **`database/`**
   - **`factories/`**: মডেল ফ্যাক্টরি ক্লাসগুলো এখানে থাকে, যা ডাটাবেসের জন্য টেস্ট ডেটা তৈরি করতে ব্যবহৃত হয়।
   - **`migrations/`**: এখানে ডাটাবেস মাইগ্রেশন ফাইলগুলো থাকে, যা ডাটাবেস টেবিল তৈরি এবং পরিবর্তন করতে ব্যবহৃত হয়।
   - **`seeders/`**: ডাটাবেস সিডিংয়ের জন্য ক্লাসগুলো এখানে থাকে, যা ডাটাবেসে প্রাথমিক ডেটা ইনসার্ট করতে ব্যবহৃত হয়।

### 5. **`public/`**
   - এখানে অ্যাপ্লিকেশনের এন্ট্রি পয়েন্ট `index.php` ফাইল থাকে। এছাড়াও এখানে পাবলিক অ্যাসেটস (CSS, JavaScript, ইমেজ) থাকে।
   - **`storage/`**: এখানে লারাভেল-এর কম্পাইল্ড টেমপ্লেট, ফাইল-ভিত্তিক সেশন, ক্যাশ, এবং লগ ফাইলগুলো থাকে।

### 6. **`resources/`**
   - **`views/`**: এখানে ব্লেড টেমপ্লেট ফাইলগুলো থাকে, যা অ্যাপ্লিকেশনের UI তৈরি করতে ব্যবহৃত হয়।
   - **`lang/`**: অ্যাপ্লিকেশনের লোকালাইজেশন ফাইলগুলো এখানে থাকে।
   - **`js/`, `css/`**: এখানে JavaScript এবং CSS ফাইলগুলো থাকে, যদিও সাধারণত এগুলো `resources` এর মধ্যে থাকে।

### 7. **`routes/`**
   - এখানে অ্যাপ্লিকেশনের রুট সংক্রান্ত ফাইলগুলো থাকে। সাধারণত এখানে `web.php`, `api.php`, `console.php`, এবং `channels.php` ফাইলগুলো থাকে। এই ফাইলগুলোতে বিভিন্ন রুট ডেফিনিশন থাকে, যা অ্যাপ্লিকেশনের বিভিন্ন অংশে রিকোয়েস্ট নির্দেশনা দেয়।

### 8. **`storage/`**
   - এখানে লগ, ক্যাশ, এবং অন্যান্য সংরক্ষিত ডেটা থাকে।
   - **`logs/`**: অ্যাপ্লিকেশনের লগ ফাইলগুলো এখানে থাকে।
   - **`framework/`**: এখানে ক্যাশ, সেশন, এবং অন্যান্য ফ্রেমওয়ার্ক সম্পর্কিত ফাইলগুলো থাকে।
   - **`app/`**: এখানে অ্যাপ্লিকেশন ভিত্তিক সংরক্ষণ করা ফাইল থাকে।

### 9. **`tests/`**
   - এখানে অ্যাপ্লিকেশনের টেস্ট ফাইলগুলো থাকে। সাধারণত `Feature` এবং `Unit` নামের দুটি ফোল্ডার থাকে, যেখানে অ্যাপ্লিকেশনের ফিচার টেস্ট এবং ইউনিট টেস্ট থাকে।

### 10. **`vendor/`**
   - এখানে Composer দ্বারা ইনস্টল করা সমস্ত প্যাকেজ এবং ডিপেনডেন্সিগুলো থাকে।

### 11. **`composer.json`**
   - এই ফাইলটি Composer-এর জন্য নির্দিষ্ট প্যাকেজ এবং ডিপেনডেন্সি ডেফিনিশন রয়েছে।

### 12. **`.env`**
   - এই ফাইলটি অ্যাপ্লিকেশনের এনভায়রনমেন্ট ভেরিয়েবল সংরক্ষণ করে। এখানে ডাটাবেস, মেইল সার্ভিস, API কী ইত্যাদির সেটিংস থাকে।

Laravel-এর এই ফোল্ডার স্ট্রাকচারটি ডেভেলপারদের জন্য খুবই সহজ এবং সংগঠিত, যা অ্যাপ্লিকেশনটি বড় হওয়ার সাথে সাথে কার্যকারিতা বজায় রাখতে সাহায্য করে।
