const mongoose = require("mongoose");

mongoose
  .connect(
    "mongodb+srv://21pa1a05e8:fsTd5S4Sob4MTZ7m@cluster0.tlamdrd.mongodb.net/",
    {
      useNewUrlParser: true,
      useUnifiedTopology: true,
    }
  )
  .then(() => {
    console.log("connected to db");
  })
  .catch((err) => console.log(err));

const Student = mongoose.model("Student", {
  name: String,
  id: Number,
  email: String,
});

const newBook = new Student({
  name: "fsTd5S4Sob4MTZ7m",
  id: 13,
  email: "raju@gmail.com",
});

const students = [
  { name: "emmi", id: 15, email: "emmi@gmail.com" },
  { name: "Sita", id: 17, email: "sita@gmail.com" },
];

// newBook
//   .save()
//   .then(() => {
//     console.log("added");
//   })
//   .catch((err) => {
//     console.log(err);
//   });

// Student.insertMany(students).then(()=>{
//     console.log("students added");
// }).catch((err)=>{
//     console.log(err);
// })

const id = 15;
// Student.find({ ["id"]: id }).then((students) => {
//   if (students.length > 0) {
//     console.log(students);
//   } else {
//     console.log("not found");
//   }
// });

// const filter = { name: "Raju" };
// const update = { email: "kusaraju@gmail.com" };

// Student.updateOne(filter,update).then((result)=>{
//     console.log(result);
// if(result.modifiedCount>0)
// {
//     console.log("Document updated successfully");
// }
// else{
//     console.log("Document was not found or no changes were made");
// }
// })

const toDelete = { name: "Raju" };

Student.deleteOne(toDelete).then((result) => {
  console.log(result);
  if (result.deletedCount > 0) {
    console.log("Document updated successfully");
  } else {
    console.log("Document was not found or no changes were made");
  }
});
