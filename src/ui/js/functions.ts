export const mult = (a: number, b: number): number => {
  return a * b
}

export function testArgs(a: number, b: number, ...args: number[]): void {
  console.log(a, b, ...args)
}
