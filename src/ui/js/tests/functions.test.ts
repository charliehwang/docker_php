// ./node_modules/.bin/jest --no-cache --watch ./src/ui/js/tests/functions.test.ts
import { mult, testArgs } from '../functions'

describe('Test Suite', () => {
  it('Should multiply correctly', () => {
    expect(mult(11, 2)).toEqual(22)
    expect(mult(0, 2)).toEqual(0)
  })
  it.only('Test Arguments', () => {
    testArgs(1, 2)
    testArgs(1, 2, 3, 4, 5, 6)
  })
})
