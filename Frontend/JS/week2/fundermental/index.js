console.log("Hello World!");

let name = "Nang";
let num = 1.12;
let isOpen = true;
let typeNull = null;
let typeUndefined = undefined;

const num1 = 100;

let obj = {
  nameMe: "Samnang",
  age: 22,
};

let arr = [
  "Sam",
  22,
  true,
  {
    objArr: "Nang",
    male: true,
  },
];

let testMax = `using this ${arr[3]["male"]} plus ${obj.age}`;

console.log(testMax);

console.log(obj);
console.log(arr[3]);

console.log(typeNull);
console.log(typeUndefined);

let age = 18;
console.log(`${age} type: ${typeof age}`);

// object in object
let objOne = {
  id: {
    nameMe: "SamnangRay",
    age: 23,
  },
};

// object in array

let array_obj = [
  "Sam",
  22,
  true,
  {
    objArr: "Nang",
    male: true,
  },
];

console.log(array_obj[3].objArr);
console.log(objOne.id.age);

console.log(4 < 6);

let ageMen = 22;

if (ageMen >= 30) {
  console.log("u are getting old!");
} else if (ageMen === 23) {
  console.log("u need to get a job!");
} else {
  console.log("u need to prepare for jobs!");
}

let score = 80;

if (score > 90) {
  console.log("Great A");
} else if (score >= 80) {
  console.log("Great B");
} else if (score >= 70) {
  console.log("Great C");
} else if (score >= 50) {
  console.log("Great D");
} else {
  console.log("Fail!!!");
}

score > 90
  ? console.log("Great A")
  : score >= 80
    ? console.log("Great B")
    : score >= 70
      ? console.log("Great C")
      : score >= 50
        ? console.log("Great D")
        : console.log("Fail!!!");

// short form if-else

ageMen >= 30
  ? console.log("u are getting old!")
  : ageMen === 23
    ? console.log("u need to get a job!")
    : console.log("u need to prepare for jobs!");

let students = ["Engcheng", "Samnang", "Rothsophea"];

for (let i = 0; i < students.length; i++) {
  console.log(students[i]);
}
console.log("============");
students.map((value) => {
  console.log(value);
});
// students.forEach((value) => {
//   console.log("3:" + value);
// });

let numbers = [1, 23, 56, 78, 23, 79, 8];
num10 = numbers.filter((num) => num > 10);
console.log(num10);

export function showName() {
  let students = ["Engcheng", "Samnang", "Rothsophea"];
  students.map((value) => {
    console.log(value);
  });
  return students;
}

showName();

//=========== Normal fuction ===========
// function plusName(num1, num2) {
//   return num1 + num2;
// }
// function a(num1, num2) {
//   return num1 - num2;
// }
// function b(num1, num2) {
//   return num1 * num2;
// }

// ========== Arrow Function =============
let plusName = (num1, num2) => {
  return num1 + num2;
};

let a = (num1, num2) => {
  return num1 - num2;
};

let b = (num1, num2) => {
  return num1 * num2;
};

console.log(b(6, 5));

console.log(plusName(5, 5));

console.log(a(6, 5));

let func1 = showName();
console.log(func1);

let funArrow = () => {
  let students = ["Engcheng", "Samnang", "Rothsophea"];
  students.map((value) => {
    console.log(value);
  });
  return students;
};
