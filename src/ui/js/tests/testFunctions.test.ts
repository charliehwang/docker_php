// /node_modules/.bin/jest --no-cache --watch ./src/ui/js/tests/testFunctions.test.ts
import { mult } from '../testFunctions'

describe('Test Suite', () => {
  it('Should multiply correctly', () => {
    expect(mult(11, 2)).toEqual(22)
    expect(mult(0, 2)).toEqual(0)
  })
})
