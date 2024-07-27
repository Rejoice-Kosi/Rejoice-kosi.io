//create a function 
const getAverage = (testscores) => {
    //1. sum up all test scores 
    // calculate the average 
    let total = 0
    for (score of testscores) {
        total = total + score

    }
    //2. calculate the average 
    const avg = total / testscores.length
    //3. return the average 
    return avg

}
// The main program 
const testscores = []
// add four scores 
testscores.push(100)
testscores.push(80)
testscores.push(75)
testscores.push(60)
// output the required information 
console.log(`Total number of tests:${testscores.length}`)
// output  each  test 
for (let i = 0; i < testscores.length; i++) {
    console.log(`Test #$(i +1):${testscores[i]}`)
}
//calculate the average
const average = getAverage(testscores)
//output the  testscores to decimal
console.log(`The average test score is: ${average.toFixed(1)}%`)
